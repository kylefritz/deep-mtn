class Guest < ApplicationRecord
  include Hashid::Rails
  belongs_to :guest_category
end