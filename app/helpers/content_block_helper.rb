module ContentBlockHelper
  def b(name)
    if @blocks.key?(name)
      @blocks[name].content
    else
      "Content \"#{name}\" is missing"
    end
  end
end
