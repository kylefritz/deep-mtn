ActiveAdmin.register ContentBlock do
  permit_params :page_id, :content_type_id, :title, :date, :content, images: []
  config.sort_order = "LOWER(page), LOWER(content_type), date, LOWER(title)"

  # search filters on index page
  preserve_default_filters!
  remove_filter :versions, :rich_text_content, :images_attachments, :images_blobs

  index do
    selectable_column

    column :id
    column :page
    column :type do |b| b.content_type end
    column :date
    column :title
    column :images do |block|
      if block.images.size == 1
        image_tag(block.images.first.representation(resize_to_limit: [100, 100]), alt: block.title)  
      else
        block.images.map do |image|
          image_tag(image.representation(resize_to_limit: [50, 50]), alt: block.title)
        end
      end
    end
    column :content do |b|
      b.content.to_plain_text
    end
    column :created_at
    column :updated_at

    actions
  end

  show do |content_block|
    attributes_table do
      row :page
      row :content_type
      row :date
      row :title
      row :images do |block|
        block.images.map do |image|
          image_tag(image.representation(resize_to_limit: [100, 100]), alt: block.title)
        end
      end
      row :created_at
      row :updated_at
      row :content do
        render 'content', { content_block: content_block }
      end
    end

    active_admin_comments
  end

  form partial: 'form'


  # updating a resource that had images caused the prior images to be deleted :(
  # this behavior was mentioned in https://github.com/rails/rails/pull/36716 but it was supposed to be fixed
  # we tried setting `config.active_storage.replace_on_assign_to_many false` in config/application.rb, but no dice
  # assign_attributes just delegates to the same method on object which seems to be right but idk...
  controller do
    def update_resource(object, attributes)
      # update_resource defined in
      # https://github.com/activeadmin/activeadmin/blob/9a33a081c99d9aa19045d46155ffe5f51ea76710/lib/active_admin/resource_controller/data_access.rb

      # HACK version of replace_on_assign_to_many(false)
      if images = params[:content_block][:images]
        images.each do |image|
          object.images.attach(image)
        end
        params[:content_block].delete(:images)
        Rails.logger.warn "******************* Appending not replacing: object.images.attach(image)"
      end

      # rest of method is the same as the default implementation
      object = assign_attributes(object, attributes)
      run_update_callbacks object do
        save_resource(object)
      end
    end
  end
end
