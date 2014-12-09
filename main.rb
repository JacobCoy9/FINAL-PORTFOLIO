require 'sinatra'
require 'sinatra/reloader' if development?

get "/" do
    @title = "Jacob Missall's Portfolio"
    @description = "This site showcases all of the awesome things that Jacob Missall has done."
    @home = "active"
    erb :home
end

get "/secret" do
    @title = "YOU FOUND THE SECRET PAGE"
    @description = "YAY YOU CLICKED ON THE SECRET PAGE LINK"
    erb :secret
end

