ActiveAdmin.register ContentBlock do
  permit_params :page_id, :content_type_id, :name, :title, :date, :content, images: []
  config.sort_order = "LOWER(page), LOWER(content_type), date, LOWER(name), LOWER(title)"

  index do
    selectable_column

    column :id
    column :page
    column :content_type
    column :name
    column :date
    column :title
    column :images do |block|
      if image = block.images.first
        if block.images.size > 1
          block.images.each do |image|
            span image_tag(image.representation(resize_to_limit: [50, 50]), alt: block.name)    
          end
        else
          span image_tag(image.representation(resize_to_limit: [100, 100]), alt: block.name)  
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
      row :name
      row :content_type
      row :date
      row :title
      row :images do |block|
        block.images.map do |image|
          image_tag(image.representation(resize_to_limit: [100, 100]), alt: block.name)
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
