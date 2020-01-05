class RenameBlockTypeIdToContentTypeId < ActiveRecord::Migration[6.0]
  def change
    rename_column :content_blocks, :block_type_id, :content_type_id
  end
end
