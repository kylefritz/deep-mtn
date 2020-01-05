class AddTitleToContentBlock < ActiveRecord::Migration[6.0]
  def change
    add_column :content_blocks, :title, :string
  end
end
