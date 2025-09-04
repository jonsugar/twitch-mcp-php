<?php

namespace McpTwitch\TwitchTool\Mcp\Servers;

use Laravel\Mcp\Server;
use McpTwitch\TwitchTool\Mcp\Tools\TwitchChatTool;

class TwitchServer extends Server
{
    public string $serverName = 'Twitch Server';

    public string $serverVersion = '0.0.1';

    public string $instructions = 'Example instructions for LLMs connecting to this MCP server.';

    public array $tools = [
        TwitchChatTool::class,
    ];

    public array $resources = [
    ];

    public array $prompts = [
        // ExamplePrompt::class,
    ];
}
