class HomeController < ApplicationController
  skip_before_action :authenticate_user!

  def show
  end

  def signout
    sign_out :user
    redirect_to "/"
  end
end
