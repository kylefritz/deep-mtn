json.extract! content_block, :id, :page, :name, :created_at, :updated_at
json.content content_block.content
json.url content_block_url(content_block, format: :json)
