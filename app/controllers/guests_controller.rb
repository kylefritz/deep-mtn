class GuestsController < ApplicationController
  skip_before_action :authenticate_user!

  def search
    @guests = Guest.all
    render formats: :json
  end

  def show
    @guest = Guest.find(params[:id])
    render formats: :json
  end
end
