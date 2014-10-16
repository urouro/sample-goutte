execute "set epel repository" do
  command "sudo rpm -Uvh --force http://dl.fedoraproject.org/pub/epel/6/x86_64/epel-release-6-8.noarch.rpm"
end

execute "set remi repository" do
  command "sudo rpm -Uvh --force http://rpms.famillecollet.com/enterprise/remi-release-6.rpm"
end

package "dstat" do
  action :install
end

package "httpd" do
  action :install
end

package "php php-devel php-mbstring" do
  options "--enablerepo=epel,remi"
end


