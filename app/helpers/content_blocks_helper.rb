module ContentBlocksHelper

  def prep_blocks(blocks)
    ActiveSupport::HashWithIndifferentAccess.new([]).tap do |h|
      blocks.each do |block|
        key = block.content_type.name
        unless h.key?(key)
          h[key] = []
        end
        h[key].push(block)
      end
    end
  end

  # get content of a single block
  def content(name)
    block(name).content
  end

  # get a single block
  def block(name)
    list(name).first
  end

  # get a list of blocks
  def list(name)
    if @blocks.key?(name)
      @blocks[name]
    else
      [ContentBlock.new(content: "Create block <strong>#{name}</strong>")]
    end
  end
end
