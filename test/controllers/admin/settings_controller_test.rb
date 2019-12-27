require "test_helper"

class Admin::SettingsControllerTest < ActionDispatch::IntegrationTest
  include Devise::Test::IntegrationHelpers

  def setup
    sign_in users(:kyle)
    Setting.google_analytics_tracker = "yoyoyo"
  end

  test "get index" do
    get "/admin/settings"
    assert_response :success
  end

  test "get show" do
    obj = Setting.first
    get "/admin/settings/#{obj.id}"
    assert_response :success
  end

  test "get edit" do
    obj = Setting.first
    get "/admin/settings/#{obj.id}/edit"
    assert_response :success
  end
end
