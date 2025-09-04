<?php

use Laravel\Mcp\Server\Facades\Mcp;
use McpTwitch\TwitchTool\Mcp\Servers\TwitchServer;

Mcp::local('demo', TwitchServer::class);
