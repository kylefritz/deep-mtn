class Page < ApplicationRecord
  has_many :content_blocks
  default_scope { order("LOWER(name)") }
end
