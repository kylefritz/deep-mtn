class IndexUsers < ActiveRecord::Migration[6.0]
  def change
    add_index :users, "LOWER(first_name), LOWER(last_name)"
  end
end
