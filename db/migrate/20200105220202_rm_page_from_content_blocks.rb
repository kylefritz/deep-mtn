class RmPageFromContentBlocks < ActiveRecord::Migration[6.0]
  def change
    remove_column :content_blocks, :page
  end
end
