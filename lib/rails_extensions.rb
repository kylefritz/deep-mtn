require "active_support"
require "active_support/core_ext/object/json"

class BigDecimal
  # rails encodes pg decimals to string by default
  # instead suffer the *loss of percision* and encode them as floats
  # https://github.com/rails/rails/issues/25017
  def as_json(*)
    to_f
  end
end

class ActiveSupport::TimeWithZone
  def too_early?
    hour < 9 # before 9am
  end
end
