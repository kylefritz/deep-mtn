class RmIndexOnContentBlocks < ActiveRecord::Migration[6.0]
  def up
    remove_index :content_blocks, [:page, :name]

    item = ContentType.create!(name: 'Item')
    add_column :content_blocks, :block_type_id, :bigint, null: true
    ContentBlock.all.update_all(block_type_id: item.id)

    change_column :content_blocks, :block_type_id, :bigint, null: false
  end

  def down
    add_index :content_blocks, [:page, :name], unique: true
    remove_column :content_blocks, :block_type_id
  end
end
