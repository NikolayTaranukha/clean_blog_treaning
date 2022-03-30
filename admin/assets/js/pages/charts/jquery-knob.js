$(function () {
    $('.knob').knob({
        draw: function () {
            // "tron" case
            if (this.$.data('skin') == 'tron') {

                var a = this.angle(this.cv)  // Angle
                    , sa = this.startAngle          // Previous start angle
                    , sat = this.startAngle         // Start angle
                    , ea                            // Previous end angle
                    , eat = sat + a                 // End angle
                    , r = true;

                this.data_fo_change.lineWidth = this.lineWidth;

                this.o.cursor
                    && (sat = eat - 0.3)
                    && (eat = eat + 0.3);

                if (this.o.displayPrevious) {
                    ea = this.startAngle + this.angle(this.value);
                    this.o.cursor
                        && (sa = ea - 0.3)
                        && (ea = ea + 0.3);
                    this.data_fo_change.beginPath();
                    this.data_fo_change.strokeStyle = this.previousColor;
                    this.data_fo_change.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                    this.data_fo_change.stroke();
                }

                this.data_fo_change.beginPath();
                this.data_fo_change.strokeStyle = r ? this.o.fgColor : this.fgColor;
                this.data_fo_change.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                this.data_fo_change.stroke();

                this.data_fo_change.lineWidth = 2;
                this.data_fo_change.beginPath();
                this.data_fo_change.strokeStyle = this.o.fgColor;
                this.data_fo_change.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                this.data_fo_change.stroke();

                return false;
            }
        }
    });
});