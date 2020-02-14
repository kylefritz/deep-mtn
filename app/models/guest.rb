class Guest < ApplicationRecord
  include Hashid::Rails
  belongs_to :guest_category
  include PgSearch::Model
  pg_search_scope :search, against: [:name1, :name2, :email1, :email2]
end
