require "test_helper"

class UserTest < ActiveSupport::TestCase
  test "meg's password is wine" do
    m = users(:meg)
    assert m.authenticate("wine")
    refute m.authenticate("not-wine")
    assert m.is_admin
    assert_equal m.id, User.meg.id
  end

  test "owners" do
    assert_equal 2, User.owners.count
  end
end
