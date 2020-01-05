class HomeController < ApplicationController
  skip_before_action :authenticate_user!

  def show
    blocks = ContentBlock.all#.includes(:content)
    @blocks = ActiveSupport::HashWithIndifferentAccess.new(Hash[blocks.collect { |b| [b.name, b] } ])

    render "show"
  end

  def signout
    sign_out :user
    redirect_to "/"
  end
end
