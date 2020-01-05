class ContentBlock < ApplicationRecord
  has_paper_trail
  has_rich_text :content
end
