<?php
$template = <<<EOD
<?xml version="1.0" encoding="UTF-8"?>
<gs_provision>
	<config version="2">
		<item name="account.1.sip">
			<part name="authenticateIncomingInvite">No</part>
			<part name="rfc2543Hold">0</part>
			<part name="publishForPresence">No</part>
			<part name="omitCharsetUtf8InMessage">No</part>
			<part name="subscribeFailureRetryWaitTime">1</part>
			<part name="specialFeature">Standard</part>
			<part name="registration">Yes</part>
			<part name="registerExpiration">60</part>
			<part name="userid">${exten}</part>
			<part name="localPort">9950</part>
			<part name="allowSipReset">No</part>
			<part name="accountDisplay">User Name</part>
			<part name="transport">UDP</part>
			<part name="registrationFailureRetryWaitTime">20</part>
			<part name="allowUnsolicitedRefer">Disabled</part>
			<part name="listeningMode">Transport_Only</part>
			<part name="calleeIdDisplay">Auto</part>
			<part name="minimumSE">90</part>
			<part name="enableRTCP">RTCP-XR</part>
			<part name="telUri">Disabled</part>
			<part name="lineSeizeTimeout">15</part>
			<part name="callerIdDisplay">Header</part>
			<part name="syncFeatureKey">No</part>
			<part name="uriSchemeWhenUsingTls">sips</part>
			<part name="supportInstanceId">Yes</part>
			<part name="unregisterOnReboot">Yes</part>
			<part name="registerBeforeExpiration">0</part>
			<part name="useActualEphemeralPortInContactWithTcpTls">No</part>
		</item>                                                                                             
		<item name="account.1.sip.subscriber">
			<part name="name">${exten}</part>
			<part name="userid">${exten}</part>
			<part name="password">${ext_secret}</part>
		</item>                                 
		<item name="network.dhcp">
			<part name="hostName">tlf_${exten}</part>
		</item>                                          
		<item name="account.1">
			<part name="name">${exten}</part>
			<part name="enable">Yes</part>
		</item>                                                                                   
		<item name="account.1.sip.server.1">
			<part name="address">${sip_serv}</part>
		</item>                                    
		<item name="provisioning.firmware">
			<part name="serverPath">${sip_serv}/gs</part>
			<part name="checkCondition">AlwaysCheck</part>
			<part name="protocol">HTTP</part>
		</item>                                            
		<item name="provisioning.config">
			<part name="serverPath">${sip_serv}/gs</part>
			<part name="filePrefix">${exten}</part>
			<part name="protocol">HTTP</part>
		</item>                                                                    
		<item name="dateTime.ntp.server">
			<part name="1">${sip_serv}</part>
			<part name="2">${ntp_serv}</part>
		</item>                                               
		<item name="dateTime.timezone">
			<part name="custom">MTZ+3MDT+3,M4.1.0,M11.1.0</part>
		</item>                                       
		<item name="dateTime">
			<part name="showOnStatusBar">Yes</part>
			<part name="timezone">Ekaterinburg, Russia</part>
		</item>                                           
		<item name="dateTime.ntp">
			<part name="updateInterval">1440</part>
		</item>                 
		<item name="dateTime.format">
			<part name="date">dd-mm-yyyy</part>
			<part name="time">12Hour</part>
		</item>                                                  
		<item name="account.1.call.hidePassword">
			<part name="length">0</part>
		</item>                                          
		<item name="account.1.sip.subscribe">
			<part name="expiration">60</part>
			<part name="forMwi">No</part>
			<part name="forRegistration">No</part>
		</item>                         
		<item name="account.1.network">
			<part name="dnsMode">ARecord</part>
			<part name="dnsSRVRegisterBeforeFailover">No</part>
			<part name="natTraversal">No</part>
			<part name="dnsSRVFailoverMode">Default</part>
		</item>                                                                               
		<item name="account.1.codec.choice">
			<part name="8">G.722</part>
			<part name="7">G.722</part>
			<part name="1">PCMU</part>
			<part name="2">PCMA</part>
			<part name="3">G.722</part>
			<part name="4">G.722</part>
			<part name="5">G.722</part>
			<part name="6">G.722</part>
		</item>                                               
		<item name="pks.mpk.1">
			<part name="account">Account1</part>
			<part name="description">Ресепшн</part>
			<part name="value">8888</part>
			<part name="keyMode">BLF</part>
		</item>                                                  
		<item name="pks.mpk.2">
			<part name="account">Account1</part>
			<part name="description">Ресторан</part>
			<part name="value">8881</part>
			<part name="keyMode">BLF</part>
		</item>                                                  
		<item name="pks.mpk.3">
			<part name="account">Account1</part>
			<part name="description">SPA</part>
			<part name="value">8088</part>
			<part name="keyMode">BLF</part>
		</item>                                                   
		<item name="pks.mpk.4">
			<part name="account">Account1</part>
			<part name="description">Клиника</part>
			<part name="value">8808</part>
			<part name="keyMode">BLF</part>
		</item>                                                
		<item name="pks.mpk.5">
			<part name="account">Account1</part>
			<part name="description">Охрана</part>
			<part name="value">8800</part>
			<part name="keyMode">BLF</part>
		</item>                                                    
		<item name="pks.mpk.6">
			<part name="account">Account1</part>
			<part name="description">Пул-бар</part>
			<part name="value">8880</part>
			<part name="keyMode">BLF</part>
		</item>    
		<item name="language">
			<part name="gui">Russian</part>
		</item>
		<item name="users.user">
			<part name="password">${device_userpass}</part>
		</item>                                                               
		<item name="users.admin">
			<part name="password">${device_admpass}</part>
		</item>                                                               
	</config>
</gs_provision>
EOD;
?>