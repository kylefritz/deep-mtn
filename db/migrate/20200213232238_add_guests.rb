class AddGuests < ActiveRecord::Migration[6.0]
  def change
    create_table :guest_categories do |t|
      t.string :name
      t.timestamps
    end

    create_table :guests do |t|
      t.references :guest_category, null: false 
      t.string :name1, null: false
      t.string :email1
      t.string :name2
      t.string :email2
      t.integer :priority, null: false
      t.json :rsvp

      t.timestamps
    end
    add_index :guests, :name1
  end
end
