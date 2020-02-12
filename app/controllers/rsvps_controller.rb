class RsvpsController < ApplicationController
  skip_before_action :authenticate_user!

  def new
    render :new, layout: nil
  end
end
