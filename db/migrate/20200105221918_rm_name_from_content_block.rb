class RmNameFromContentBlock < ActiveRecord::Migration[6.0]
  def change
    remove_column :content_blocks, :name, :string
  end
end
