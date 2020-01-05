ActiveAdmin.register ContentBlock do
  permit_params :page, :name, :title, :content, images: []
  config.sort_order = "LOWER(page), LOWER(name), LOWER(title)"

  index do
    selectable_column

    column :id
    column :page
    column :name
    column :title
    column :images do |block|
      if image = block.images.first
        span link_to(image_tag(image, style: 'height:100px;width:auto;', alt: block.name), admin_content_block_path(block))
        if block.images.size > 1
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
      row :title
      row :images do |block|
        block.images.map do |image|
          image_tag(image, style: 'height:100px;width:auto;', alt: block.name)
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
