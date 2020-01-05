ActiveAdmin.register ContentBlock do
  permit_params :page_id, :content_type_id, :name, :title, :content, images: []
  config.sort_order = "LOWER(page), LOWER(content_type), LOWER(name), LOWER(title)"

  index do
    selectable_column

    column :id
    column :page
    column :content_type
    column :name
    column :title
    column :images do |block|
      if image = block.images.first
        span image_tag(image.representation(resize_to_limit: [100, 100]), alt: block.name)
        if block.images.size > 1
          br
          status_tag true, label: " + #{block.images.size - 1}"
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
