sepath=$(cd `dirname $0`; pwd)
cd $basepath
if [ -f "/home/easecloud/github-wingyao/hyperf-api/runtime/hyperf.pid" ];then
cat /home/easecloud/github-wingyao/hyperf-api/runtime/hyperf.pid | awk '{print $1}' | xargs kill && rm -rf /home/easecloud/github-wingyao/hyperf-api/runtime/hyperf.pid && rm -rf /home/easecloud/github-wingyao/hyperf-api/runtime/container
fi
php -d swoole.use_shortname=Off /home/easecloud/github-wingyao/hyperf-api/bin/hyperf.php start
