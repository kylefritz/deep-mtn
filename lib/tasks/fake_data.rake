namespace :fake_data do
  desc "create 100 fake users"
  task users: :environment do
    unless Rails.env.development?
      throw "only create fake data in dev"
    end

    (0..100).map do
      User.create!(
        first_name: Faker::Name.first_name,
        last_name: Faker::Name.last_name,
        password: Faker::Lorem.characters(number: 10),
        email: Faker::Internet.email,
      )
    end
  end
end
