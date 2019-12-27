require "test_helper"

class Admin::VersionsControllerTest < ActionDispatch::IntegrationTest
  include Devise::Test::IntegrationHelpers

  def setup
    sign_in users(:kyle)
    PaperTrail.request.whodunnit = -> { users(:kyle).id }
    Setting.google_analytics_tracker = "yoyoyo"
    Setting.google_analytics_tracker = "nah"
  end

  test "get index" do
    get "/admin/versions"
    assert_response :success

    # 3 changes = signin, & 2 GA changes
    assert_select "tbody tr", 3, "num_versions=#{PaperTrail::Version.count}"
  end

  test "get show" do
    obj = PaperTrail::Version.first
    refute_nil obj
    get "/admin/versions/#{obj.id}"
    assert_response :success
  end
end
