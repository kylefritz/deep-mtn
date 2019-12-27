class User < ApplicationRecord
  include Hashid::Rails
  default_scope { order("LOWER(first_name), LOWER(last_name)") }
  devise :database_authenticatable, :registerable, :recoverable, :rememberable, :validatable, :trackable
  has_many :messages, class_name: "Ahoy::Message", as: :user
  has_many :visits, class_name: "Ahoy::Visit"
  has_paper_trail
  scope :owners, -> { where(email: OWNER_EMAILS) }
  scope :not_owners, -> { where.not(email: OWNER_EMAILS) }
  scope :admin, -> { where(is_admin: true) }
  before_validation(on: :create) do
    # if no password, set random passwords on user
    self.password = SecureRandom.base64(16) if password.blank?
  end

  def authenticate(password)
    Devise::Encryptor.compare(User, encrypted_password, password)
  end

  def name
    [first_name, last_name].compact.join(" ").presence || email
  end

  def sort_key
    [last_name, email].compact.join(" ").downcase
  end

  #
  # vanity users
  #
  KYLE_EMAIL = "kyle.p.fritz@gmail.com"
  MEG_EMAIL = "meghan.l.ames@gmail.com"
  OWNER_EMAILS = [KYLE_EMAIL, MEG_EMAIL]
  def self.kyle
    User.find_by(email: KYLE_EMAIL)
  end

  def self.meg
    User.find_by(email: MEG_EMAIL)
  end
end
