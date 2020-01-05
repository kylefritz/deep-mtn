class AddDateToContent < ActiveRecord::Migration[6.0]
  def change
    add_column :content_blocks, :date, :date
  end
end
