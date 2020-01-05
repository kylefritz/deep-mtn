class AddPage < ActiveRecord::Migration[6.0]
  def change
    create_table :pages do |t|
      t.string :name, null: false

      t.timestamps
    end
    add_index :pages, :name, unique: true
    add_index :content_types, :name, unique: true
  end
end
