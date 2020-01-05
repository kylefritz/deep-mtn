class ContentBlock < ApplicationRecord
  has_paper_trail
  has_rich_text :content
  has_many_attached :images
  belongs_to :content_type
  belongs_to :page
end
