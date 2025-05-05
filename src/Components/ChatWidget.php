
<?php

namespace Kamran\ChatWidget\Components;

use Illuminate\View\Component;

class ChatWidget extends Component
{
    public function render()
    {
        return view('kamran-chat-widget::components.chat-widget');
    }
}
