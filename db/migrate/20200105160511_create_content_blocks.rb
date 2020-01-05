class CreateContentBlocks < ActiveRecord::Migration[6.0]
  def change
    create_table :content_blocks do |t|
      t.string :name, null: false
      t.string :page, null: false

      t.timestamps
    end
    add_index :content_blocks, [:page, :name], unique: true
  end
end
