import "./bootstrap";
import "./simplyCountdown.min.js";

// Simply Countdown Start
simplyCountdown(".simply-countdown", {
    year: 2023, // required
    month: 11, // required
    day: 25, // required
    words: {
        //words displayed into the countdown
        days: { singular: "hari", plural: "hari" },
        hours: { singular: "jam", plural: "jam" },
        minutes: { singular: "menit", plural: "menit" },
        seconds: { singular: "detik", plural: "detik" },
    },
});
// Simply Countdown End
