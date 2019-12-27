class ApplicationMailer < ActionMailer::Base
  default from: "Deep Mountain <no-reply@deepmountainwv.com>",
          reply_to: "mpeopleofbmore@gmail.com"
  layout "mailer"
end
