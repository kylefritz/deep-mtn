require "test_helper"

class HomeControllerTest < ActionDispatch::IntegrationTest
  include Devise::Test::IntegrationHelpers

  def setup
    sign_in users(:kyle)
  end

  test "get home" do
    get "/"
    assert :success
  end

  test "signout" do
    get "/signout"
    assert_redirected_to "/"
  end
end
