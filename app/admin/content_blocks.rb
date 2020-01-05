ActiveAdmin.register ContentBlock do
  permit_params :page, :name, :content
  config.sort_order = "LOWER(page), LOWER(name)"


  # index do
  #   selectable_column

  #   column :id
  #   column :page
  #   column :name
  #   column :content
  #   column :created_at
  #   column :updated_at

  #   actions
  # end

  show do |content_block|
    attributes_table do
      row :page
      row :name
      row :created_at
      row :updated_at
      row :content do
        render 'content', { content_block: content_block }
      end
    end

    active_admin_comments
  end
end
