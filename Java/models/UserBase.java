/**
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

package softheon.enterprise.api.client.models;

import org.joda.time.DateTime;
import com.fasterxml.jackson.annotation.JsonProperty;

/**
 * The UserBase Class.
 */
public class UserBase {
    /**
     * Gets or sets the primary group identifier.
     */
    @JsonProperty(value = "PrimaryGroupID")
    private Integer primaryGroupID;

    /**
     * Gets or sets the type. Possible values include: 'ImageDesk',
     * 'PublishDesk', 'FaxDesk', 'CaptureDesk', 'RecognitionDesk',
     * 'PortalUser', 'AdminDesk', 'WorkflowDesk', 'Benchmark', 'ReportDesk',
     * 'ColdDesk', 'PortalDesk', 'WorkflowArchitect', 'DocumentDesk',
     * 'Poweruser'.
     */
    @JsonProperty(value = "Type")
    private String type;

    /**
     * Gets or sets the state. Possible values include: 'Active', 'Inactive'.
     */
    @JsonProperty(value = "State")
    private String state;

    /**
     * Gets or sets the full name.
     */
    @JsonProperty(value = "FullName")
    private String fullName;

    /**
     * Gets or sets the object count.
     */
    @JsonProperty(value = "ObjectCount")
    private Integer objectCount;

    /**
     * Gets or sets the ip address.
     */
    @JsonProperty(value = "IPAddress")
    private String iPAddress;

    /**
     * Gets or sets the entity acl.
     */
    @JsonProperty(value = "EntityAcl")
    private Integer entityAcl;

    /**
     * Gets or sets the attachment acl.
     */
    @JsonProperty(value = "AttachmentAcl")
    private Integer attachmentAcl;

    /**
     * Gets or sets the note acl.
     */
    @JsonProperty(value = "NoteAcl")
    private Integer noteAcl;

    /**
     * Gets or sets the entity feature.
     */
    @JsonProperty(value = "EntityFeature")
    private Integer entityFeature;

    /**
     * Gets or sets the attachment feature.
     */
    @JsonProperty(value = "AttachmentFeature")
    private Integer attachmentFeature;

    /**
     * Gets or sets the note feature.
     */
    @JsonProperty(value = "NoteFeature")
    private Integer noteFeature;

    /**
     * Gets or sets the admin mask. Possible values include: 'None',
     * 'CabinetAdmin', 'DrawerAdmin', 'GroupAdmin', 'UserAdmin',
     * 'WorkflowAdmin', 'VersionAdmin', 'TemplateAdmin', 'ApplicationAdmin'.
     */
    @JsonProperty(value = "AdminMask")
    private String adminMask;

    /**
     * Gets or sets the address.
     */
    @JsonProperty(value = "Address")
    private String address;

    /**
     * Gets or sets the reserved int1.
     */
    @JsonProperty(value = "ReservedInt1")
    private Integer reservedInt1;

    /**
     * Gets or sets the reserved int2.
     */
    @JsonProperty(value = "ReservedInt2")
    private Integer reservedInt2;

    /**
     * Gets or sets the reserved double1.
     */
    @JsonProperty(value = "ReservedDouble1")
    private Double reservedDouble1;

    /**
     * Gets or sets the reserved double2.
     */
    @JsonProperty(value = "ReservedDouble2")
    private Double reservedDouble2;

    /**
     * Gets or sets the reserved string1.
     */
    @JsonProperty(value = "ReservedString1")
    private String reservedString1;

    /**
     * Gets or sets the reserved string2.
     */
    @JsonProperty(value = "ReservedString2")
    private String reservedString2;

    /**
     * Gets or sets the user expiration.
     */
    @JsonProperty(value = "UserExpiration")
    private DateTime userExpiration;

    /**
     * Get the primaryGroupID value.
     *
     * @return the primaryGroupID value
     */
    public Integer primaryGroupID() {
        return this.primaryGroupID;
    }

    /**
     * Set the primaryGroupID value.
     *
     * @param primaryGroupID the primaryGroupID value to set
     * @return the UserBase object itself.
     */
    public UserBase withPrimaryGroupID(Integer primaryGroupID) {
        this.primaryGroupID = primaryGroupID;
        return this;
    }

    /**
     * Get the type value.
     *
     * @return the type value
     */
    public String type() {
        return this.type;
    }

    /**
     * Set the type value.
     *
     * @param type the type value to set
     * @return the UserBase object itself.
     */
    public UserBase withType(String type) {
        this.type = type;
        return this;
    }

    /**
     * Get the state value.
     *
     * @return the state value
     */
    public String state() {
        return this.state;
    }

    /**
     * Set the state value.
     *
     * @param state the state value to set
     * @return the UserBase object itself.
     */
    public UserBase withState(String state) {
        this.state = state;
        return this;
    }

    /**
     * Get the fullName value.
     *
     * @return the fullName value
     */
    public String fullName() {
        return this.fullName;
    }

    /**
     * Set the fullName value.
     *
     * @param fullName the fullName value to set
     * @return the UserBase object itself.
     */
    public UserBase withFullName(String fullName) {
        this.fullName = fullName;
        return this;
    }

    /**
     * Get the objectCount value.
     *
     * @return the objectCount value
     */
    public Integer objectCount() {
        return this.objectCount;
    }

    /**
     * Set the objectCount value.
     *
     * @param objectCount the objectCount value to set
     * @return the UserBase object itself.
     */
    public UserBase withObjectCount(Integer objectCount) {
        this.objectCount = objectCount;
        return this;
    }

    /**
     * Get the iPAddress value.
     *
     * @return the iPAddress value
     */
    public String iPAddress() {
        return this.iPAddress;
    }

    /**
     * Set the iPAddress value.
     *
     * @param iPAddress the iPAddress value to set
     * @return the UserBase object itself.
     */
    public UserBase withIPAddress(String iPAddress) {
        this.iPAddress = iPAddress;
        return this;
    }

    /**
     * Get the entityAcl value.
     *
     * @return the entityAcl value
     */
    public Integer entityAcl() {
        return this.entityAcl;
    }

    /**
     * Set the entityAcl value.
     *
     * @param entityAcl the entityAcl value to set
     * @return the UserBase object itself.
     */
    public UserBase withEntityAcl(Integer entityAcl) {
        this.entityAcl = entityAcl;
        return this;
    }

    /**
     * Get the attachmentAcl value.
     *
     * @return the attachmentAcl value
     */
    public Integer attachmentAcl() {
        return this.attachmentAcl;
    }

    /**
     * Set the attachmentAcl value.
     *
     * @param attachmentAcl the attachmentAcl value to set
     * @return the UserBase object itself.
     */
    public UserBase withAttachmentAcl(Integer attachmentAcl) {
        this.attachmentAcl = attachmentAcl;
        return this;
    }

    /**
     * Get the noteAcl value.
     *
     * @return the noteAcl value
     */
    public Integer noteAcl() {
        return this.noteAcl;
    }

    /**
     * Set the noteAcl value.
     *
     * @param noteAcl the noteAcl value to set
     * @return the UserBase object itself.
     */
    public UserBase withNoteAcl(Integer noteAcl) {
        this.noteAcl = noteAcl;
        return this;
    }

    /**
     * Get the entityFeature value.
     *
     * @return the entityFeature value
     */
    public Integer entityFeature() {
        return this.entityFeature;
    }

    /**
     * Set the entityFeature value.
     *
     * @param entityFeature the entityFeature value to set
     * @return the UserBase object itself.
     */
    public UserBase withEntityFeature(Integer entityFeature) {
        this.entityFeature = entityFeature;
        return this;
    }

    /**
     * Get the attachmentFeature value.
     *
     * @return the attachmentFeature value
     */
    public Integer attachmentFeature() {
        return this.attachmentFeature;
    }

    /**
     * Set the attachmentFeature value.
     *
     * @param attachmentFeature the attachmentFeature value to set
     * @return the UserBase object itself.
     */
    public UserBase withAttachmentFeature(Integer attachmentFeature) {
        this.attachmentFeature = attachmentFeature;
        return this;
    }

    /**
     * Get the noteFeature value.
     *
     * @return the noteFeature value
     */
    public Integer noteFeature() {
        return this.noteFeature;
    }

    /**
     * Set the noteFeature value.
     *
     * @param noteFeature the noteFeature value to set
     * @return the UserBase object itself.
     */
    public UserBase withNoteFeature(Integer noteFeature) {
        this.noteFeature = noteFeature;
        return this;
    }

    /**
     * Get the adminMask value.
     *
     * @return the adminMask value
     */
    public String adminMask() {
        return this.adminMask;
    }

    /**
     * Set the adminMask value.
     *
     * @param adminMask the adminMask value to set
     * @return the UserBase object itself.
     */
    public UserBase withAdminMask(String adminMask) {
        this.adminMask = adminMask;
        return this;
    }

    /**
     * Get the address value.
     *
     * @return the address value
     */
    public String address() {
        return this.address;
    }

    /**
     * Set the address value.
     *
     * @param address the address value to set
     * @return the UserBase object itself.
     */
    public UserBase withAddress(String address) {
        this.address = address;
        return this;
    }

    /**
     * Get the reservedInt1 value.
     *
     * @return the reservedInt1 value
     */
    public Integer reservedInt1() {
        return this.reservedInt1;
    }

    /**
     * Set the reservedInt1 value.
     *
     * @param reservedInt1 the reservedInt1 value to set
     * @return the UserBase object itself.
     */
    public UserBase withReservedInt1(Integer reservedInt1) {
        this.reservedInt1 = reservedInt1;
        return this;
    }

    /**
     * Get the reservedInt2 value.
     *
     * @return the reservedInt2 value
     */
    public Integer reservedInt2() {
        return this.reservedInt2;
    }

    /**
     * Set the reservedInt2 value.
     *
     * @param reservedInt2 the reservedInt2 value to set
     * @return the UserBase object itself.
     */
    public UserBase withReservedInt2(Integer reservedInt2) {
        this.reservedInt2 = reservedInt2;
        return this;
    }

    /**
     * Get the reservedDouble1 value.
     *
     * @return the reservedDouble1 value
     */
    public Double reservedDouble1() {
        return this.reservedDouble1;
    }

    /**
     * Set the reservedDouble1 value.
     *
     * @param reservedDouble1 the reservedDouble1 value to set
     * @return the UserBase object itself.
     */
    public UserBase withReservedDouble1(Double reservedDouble1) {
        this.reservedDouble1 = reservedDouble1;
        return this;
    }

    /**
     * Get the reservedDouble2 value.
     *
     * @return the reservedDouble2 value
     */
    public Double reservedDouble2() {
        return this.reservedDouble2;
    }

    /**
     * Set the reservedDouble2 value.
     *
     * @param reservedDouble2 the reservedDouble2 value to set
     * @return the UserBase object itself.
     */
    public UserBase withReservedDouble2(Double reservedDouble2) {
        this.reservedDouble2 = reservedDouble2;
        return this;
    }

    /**
     * Get the reservedString1 value.
     *
     * @return the reservedString1 value
     */
    public String reservedString1() {
        return this.reservedString1;
    }

    /**
     * Set the reservedString1 value.
     *
     * @param reservedString1 the reservedString1 value to set
     * @return the UserBase object itself.
     */
    public UserBase withReservedString1(String reservedString1) {
        this.reservedString1 = reservedString1;
        return this;
    }

    /**
     * Get the reservedString2 value.
     *
     * @return the reservedString2 value
     */
    public String reservedString2() {
        return this.reservedString2;
    }

    /**
     * Set the reservedString2 value.
     *
     * @param reservedString2 the reservedString2 value to set
     * @return the UserBase object itself.
     */
    public UserBase withReservedString2(String reservedString2) {
        this.reservedString2 = reservedString2;
        return this;
    }

    /**
     * Get the userExpiration value.
     *
     * @return the userExpiration value
     */
    public DateTime userExpiration() {
        return this.userExpiration;
    }

    /**
     * Set the userExpiration value.
     *
     * @param userExpiration the userExpiration value to set
     * @return the UserBase object itself.
     */
    public UserBase withUserExpiration(DateTime userExpiration) {
        this.userExpiration = userExpiration;
        return this;
    }

}
