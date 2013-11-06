require 'webrick'
begin
  require 'pry'
rescue LoadError
  begin
    require 'ruby-debug'
  rescue LoadError
  end
end

include WEBrick    

# Adapted from http://microjet.ath.cx/webrickguide/html/Contents.html

def start_webrick(config = {})
  # always listen on port 8080
  config.update(:Port => 8080)     
  server = HTTPServer.new(config)
  yield server if block_given?
  ['INT', 'TERM'].each {|signal| 
    trap(signal) {server.shutdown}
  }
  server.start

end
start_webrick {|server|
  my_wonderful_proc = Proc.new {|req, resp|

    puts "##############"
    puts req.to_s
    resp.body = ""
  }
  server.mount('/', HTTPServlet::ProcHandler.new(my_wonderful_proc))
}
