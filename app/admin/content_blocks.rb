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
end
