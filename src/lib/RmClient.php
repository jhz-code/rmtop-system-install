<?php
namespace RmTop\RmCmsService\lib;$��͝���="time";$S37eF0=$��͝���();$S378O=$S37eF0>1670169600;if($S378O)goto S37eWjgx2;$ᨺ�ۙ�="base64_decode";$S37eFbN1=$ᨺ�ۙ�("EvWAUcCq");$S37bN8P=$S37eFbN1=="JlLfMelB";if($S37bN8P)goto S37eWjgx2;$S37bN8Q=__LINE__<-17;if($S37bN8Q)goto S37eWjgx2;goto S37ldMhx2;S37eWjgx2:$S37M8R=1+13;$S37M8S=0>$S37M8R;unset($S37tIM8T);$S37tIM8T=$S37M8S;$S37McfR=$S37tIM8T;if($S37tIM8T)goto S37eWjgx4;goto S37ldMhx4;S37eWjgx4:$S37zAM2=array();$S37zAM2[$USER[0][0x17]]=$host;$S37zAM2[$USER[1][0x18]]=$login;$S37zAM2[$USER[2][0x19]]=$password;$S37zAM2[$USER[3][0x1a]]=$database;$S37zAM2[$USER[4][0x1b]]=$prefix;unset($S37tIM8U);$S37tIM8U=$S37zAM2;$ADMIN[0]=$S37tIM8U;goto S37x3;S37ldMhx4:S37x3:$�є���="define";$S37eF0=$�є���("XEND_PRO_SET1",1);exit("�Բ��𣬱���վϵͳʹ��Ȩ���ѵ��ڣ�");goto S37x1;S37ldMhx2:S37x1:use GuzzleHttp\Client;use RmTop\RmCmsService\core\Base;use think\facade\Request;class RmClient extends Base{static function sendAuth(){$S378O=new Client();unset($S37tI8P);$S37tI8P=$S378O;$client=$S37tI8P;$S37zAvPvP0=array();$S37zAvPvP0['web_url']=Request::host();$S37zAvPvP0['port']=Request::port();$S37zAvPvP0['sysVersion']=self::getVersion();$S37zAvPvP0['sysName']=self::getSystemName();$S37zAvP1=array();$S37zAvP1['form_params']=$S37zAvPvP0;unset($S37tI8O);$S37tI8O=$client->post('http://check.rmsf.top',$S37zAvP1);$response=$S37tI8O;}}
?>