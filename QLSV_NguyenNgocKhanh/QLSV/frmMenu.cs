using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using FontAwesome.Sharp;
using QLSV.frm;

namespace QLSV
{
    public partial class frmMenu : Form
    {
        // private object currentchildform;
        private Form currentchildform;
        private IconButton currentbtn;
        private Panel lefborderbtn;
        private object iconmenusmall;
        public frmMenu()
        {
            
            InitializeComponent();
            lefborderbtn = new Panel();
            lefborderbtn.Size = new Size(7, 50);
            panTieude.Controls.Add(lefborderbtn);
        }
        private struct RGBColors
        {
            public static Color color1 = Color.FromArgb(172, 126, 241);
            public static Color color2 = Color.FromArgb(249, 118, 176);
            public static Color color3 = Color.FromArgb(253, 138, 114);
            public static Color color4 = Color.FromArgb(95, 77, 221);
            public static Color color5 = Color.FromArgb(249, 88, 155);
            public static Color color6 = Color.FromArgb(24, 161, 251);
            public static Color color7 = Color.FromArgb(145, 151, 154);

        }
        private void motrangcon(Form trangcon)
        {
            if (currentchildform != null)
            {
                currentchildform.Close();
            }
            currentchildform = trangcon;
            trangcon.TopLevel = false;
            trangcon.FormBorderStyle = FormBorderStyle.None;
            trangcon.Dock = DockStyle.Fill;
            panTrangcon.Controls.Add(trangcon);
            panTrangcon.Tag = trangcon;
            trangcon.BringToFront();
            trangcon.Show();
            // labelcon.Text = trangcon.Text;
        }
        private void disablebtn()
        {
            if (currentbtn != null)
            {
                //button
                currentbtn.BackColor = Color.FromArgb(34, 36, 49);
                currentbtn.ForeColor = Color.Gainsboro;
                currentbtn.TextAlign = ContentAlignment.MiddleLeft;
                currentbtn.IconColor = Color.Gainsboro;
                currentbtn.TextImageRelation =
                TextImageRelation.ImageBeforeText;
                currentbtn.ImageAlign = ContentAlignment.MiddleLeft;
            }
        }
        private void activebtn(object senderbtn, Color color)
        {
            if (senderbtn != null)
            {
                disablebtn();
                //button
                currentbtn = (IconButton)senderbtn;
                currentbtn.BackColor = Color.FromArgb(37, 36, 81);
                currentbtn.ForeColor = color;
                currentbtn.TextAlign = ContentAlignment.MiddleCenter;
                currentbtn.IconColor = color;
                currentbtn.TextImageRelation =
                TextImageRelation.TextBeforeImage;
                currentbtn.ImageAlign = ContentAlignment.MiddleRight;
                //left border btn
                lefborderbtn.BackColor = color;
                lefborderbtn.Location = new Point(0, currentbtn.Location.Y);
                lefborderbtn.Visible = true;
                lefborderbtn.BringToFront();
                //icon small
                // iconmenusmall.IconChar = currentbtn.IconChar;
                // iconmenusmall.IconColor = color;
            }
        }
                
        private void iconButton1_Click(object sender, EventArgs e)
            {
            activebtn(sender, RGBColors.color2);
            motrangcon(new frmQLSV ());
        }

            private void iconPictureBox3_Click(object sender, EventArgs e)
            {

            }

            private void iconPictureBox6_Click(object sender, EventArgs e)
            {

            }

            private void frmMenu_Load(object sender, EventArgs e)
            {

            }

        private void btnGiangVien_Click(object sender, EventArgs e)
        {
            activebtn(sender, RGBColors.color2);
            motrangcon(new frmQLGV());
        }

        private void btnQuanLyDiem_Click(object sender, EventArgs e)
        {
            activebtn(sender, RGBColors.color2);
            motrangcon(new frmQLDiem());
        }

        private void btnKhoa_Click(object sender, EventArgs e)
        {
            activebtn(sender, RGBColors.color2);
            motrangcon(new frmQuanLyKhoa());
        }

        private void btnLop_Click(object sender, EventArgs e)
        {
            activebtn(sender, RGBColors.color2);
            motrangcon(new frmQLLop());
        }

        private void btnMon_Click(object sender, EventArgs e)
        {
            activebtn(sender, RGBColors.color2);
            motrangcon(new frmQLMon());
        }
    }
    }
