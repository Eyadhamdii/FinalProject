<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AbsentNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $studentName;
    public $courseName;

    /**
     * Create a new message instance.
     *
     * @param string $studentName
     * @param string $courseName
     */
    public function __construct($studentName, $courseName)
    {
        $this->studentName = $studentName;
        $this->courseName = $courseName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Absent Notification')
            ->view('emails.absent-notification')
            ->with([
                'studentName' => $this->studentName,
                'courseName' => $this->courseName,
            ]);
    }
}
