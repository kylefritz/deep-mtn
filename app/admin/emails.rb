ActiveAdmin.register Ahoy::Message, as: "Email" do
  actions :index, :show
  includes :user

  scope :all, default: true

  index do
    column :to do |email|
      div auto_link email.user, email.to
    end
    column :user do |email|
      div auto_link email.user
    end
    column :sent_at
    column :opened_at
    column :clicked_at
    column :subject
    column :mailer
  end
end
