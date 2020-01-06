class HomeController < ApplicationController
  skip_before_action :authenticate_user!

  def show
    #TODO: eager load .includes(:content)
    @blocks = helpers.prep_blocks(ContentBlock.all.includes(:content_type))
    render "show", layout: params[:layout] || 'application'
  end

  def signout
    sign_out :user
    redirect_to "/"
  end
end
