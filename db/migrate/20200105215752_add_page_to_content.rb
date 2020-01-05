class AddPageToContent < ActiveRecord::Migration[6.0]
  def up
    add_index :content_blocks, :page

    home = Page.create!(name: 'Home')
    add_column :content_blocks, :page_id, :bigint, null: true
    ContentBlock.all.update_all(page_id: home.id)

    change_column :content_blocks, :page_id, :bigint, null: false
  end

  def down
    add_index :content_blocks, [:page, :name], unique: true
    remove_column :content_blocks, :page_id
  end
end
