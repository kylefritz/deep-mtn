class ContentBlocksController < InheritedResources::Base

  private

    def content_block_params
      params.require(:content_block).permit(:page, :name, :content)
    end

end
