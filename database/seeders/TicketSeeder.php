<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $line_up = ['Justin Bieber','Harry Styles'];
        $line_up_image = [
            'https://media.gq.com/photos/56bcb218cdf2db6945d2ef93/4:3/w_2000,h_1500,c_limit/bieber-coverstory-square.jpg',
            'https://m.media-amazon.com/images/M/MV5BMTUxMzU2MTk1OF5BMl5BanBnXkFtZTgwNzg4NjAwMzI@._V1_.jpg',
        ];
        $ticket_type = [

            'VIP',
            'VVIP',
            'REGULAR'
        ];
        $events = [

            [
                'category_id'  => 1,
                'event_name'   => 'Justin Bieber- Justice World Tour',
                'description'  => 'Justin Bieber Justice World Tour kini hadir di jakarta untuk menyapa fans',
                'event_date'   => null,
                'event_time'   => null,
                'location'     => 'Stadion Madya Gelora Bung Karno, Jakarta, Indonesia',
                'line_up'      => json_encode($line_up),
                'image_line_up'      => json_encode($line_up_image),
                'image'         => 'https://media.gq.com/photos/56bcb218cdf2db6945d2ef93/4:3/w_2000,h_1500,c_limit/bieber-coverstory-square.jpg',
                'total_ticket'  => 50,
                'ticket_type'   => json_encode($ticket_type)
            ],
            [
                'category_id'  => 2,
                'event_name'   => 'Justin Bieber- Justice World Tour',
                'description'  => 'Justin Bieber Justice World Tour kini hadir di jakarta untuk menyapa fans',
                'event_date'   => null,
                'event_time'   => null,
                'location'     => 'Stadion Madya Gelora Bung Karno, Jakarta, Indonesia',
                'line_up'      => json_encode($line_up),
                'image_line_up'      => json_encode($line_up_image),
                'image'         => 'https://media.gq.com/photos/56bcb218cdf2db6945d2ef93/4:3/w_2000,h_1500,c_limit/bieber-coverstory-square.jpg',
                'total_ticket'  => 70,
                'ticket_type'   => json_encode($ticket_type)
            ],

        ];


        foreach ($events as $key => $value) {

            Ticket::create($value);
        }
    }
}
