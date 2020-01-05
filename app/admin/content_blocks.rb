ActiveAdmin.register ContentBlock do
  permit_params :page, :name, :title, :content, :image
  config.sort_order = "LOWER(page), LOWER(name)"


  index do
    selectable_column

    column :id
    column :page
    column :name
    column :title
    column :image do |block|
      if block.image.attached?
        span link_to(image_tag(block.image, size: "100x100", alt: block.name), admin_content_block_path(block))
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
      row :image do |block|
        if block.image.attached?
          image_tag url_for(block.image)
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
